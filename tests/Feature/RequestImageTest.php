<?php

namespace Tests\Feature;

use App\Models\Member;
use App\Models\Request;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Passport;
use Tests\TestCase;

/**
 * Class
 * @link https://phpunit.readthedocs.io/en/9.5/annotations.html#group
 * @link https://phpunit.readthedocs.io/en/9.5/annotations.html#testwith
 */
class RequestImageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User
     */
//    private $user;

    /**
     * A basic feature test example.
     *
     * @group image
     * @return void
     */
//    public function testUploadingAImage()
//    {
//        $this->withoutExceptionHandling();
//        Storage::fake('image');
//        $imageFile  = UploadedFile::fake()->create('somePdfThing.pdf', 1000, 'application/pdf');
//        $imageFile1 = UploadedFile::fake()->create('somePdfThing1.pdf', 1001, 'application/pdf');
//
//        // Make sure I can upload the file
//        $response = $this->post(route('api.image.store'), [
//            'request_item_id'  => '1',
//            'image_type_id' => '1',
//            'name'             => 'somePdfThing.pdf',
//            'mime_type'        => 'application/pdf',
//            'file'             => $imageFile,
//        ]);
//        $response->assertSuccessful();
//        $imageFromResponse = $response->json();
//
//        Storage::disk('image')->assertExists($imageFromResponse['uuid']);
//
//        // Make sure I can request the file
//        $response = $this->get($imageFromResponse['url']);
//        $response
//            ->assertOk()
//            ->assertHeader('Content-Type', $imageFromResponse['mime_type']);
//
//        // When I update the file I expect 2 entries in the datbase and 2 files on disk
//        $response = $this->put(route('api.image.update', [
//            'image' => $imageFromResponse['uuid'],
//            'name'     => 'somePdfThing1.pdf',
//        ]), [
//            'request_item_id'  => '1',
//            'image_type_id' => '1',
//            'name'             => 'somePdfThing1.pdf',
//            'mime_type'        => 'application/pdf',
//            'file'             => $imageFile1,
//        ]);
//        $response->assertSuccessful();
//        $updatedImageFromResponse = $response->json();
//
//        self::assertNotEquals($updatedImageFromResponse['uuid'], $imageFromResponse['uuid']);
//        self::assertCount(2, Image::all());
//    }

    /**
     * Before running these tests install passport to make sure the tokens exists.
     */
    protected function setUp(): void
    {
        parent::setUp();
        // this will store a new user with random attributes in the database.
        /* @var User $user */
        $this->user   = User::factory(['password' => Hash::make('password')])->create();
        $this->member = Member::factory()->hasAddresses(1, ['is_primary' => true])->create();
    }
}
