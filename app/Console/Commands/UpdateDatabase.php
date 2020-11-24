<?php

namespace App\Console\Commands;

use App\Models\Meme;
use Illuminate\Console\Command;

class UpdateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meme:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all Memes in the Database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $memes = Meme::all();
        $bar = $this->output->createProgressBar($memes->count());
        $this->info('Starting updating existing Memes in the Database');
        $bar->start();

        foreach($memes as $meme)
        {
            $url = $meme->url.'.json';
            $json = json_decode(file_get_contents($url), false);

            $result = $json[0]->data->children[0];

            $meme = Meme::where('id', $meme->id);
            $meme->name = $result->data->title;
            $meme->subreddit = $result->data->subreddit;
            $meme->image = $result->data->url_overridden_by_dest;
            $meme->thumbnail = $result->data->thumbnail;
            $meme->url = $meme->url;
            $meme->save();
            $bar->advance();
        }
        $bar->finish();
        $this->info('All Memes are UpToDate');
    }
}
