<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UploadImageTest extends TestCase
{
    /** @test */
    public function it_should_upload_an_image()
    {


        Storage::fake('local');

        $file = UploadedFile::fake()->image('test.jpg');

        $this->post('/upload', [
            'images' => $file,
        ]);

        Storage::disk('local')->assertExists($file->hashName());
    }
}
