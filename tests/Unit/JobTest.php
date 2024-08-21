<?php

use App\Models\Job;
use App\Models\Employer;

test('it belongs to an employer', function () {
    /*  expect(true)->toBeTrue(); */
    // AAA

    //Arranging the world
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id /* this will overide the newly created job employer_id with $employer id */
    ]);

    //Act perform action /* sometime act assert in in one code */
    expect($job->employer->is($employer))->toBeTrue();
    //Assert what to be expected to happen


});
it('can have tags', function () {
    //AAA
    //Arraging
    $job = Job::factory()->create();

    //Act
    $job->tag('Frontdnd');
    //Assert
    expect($job->tags)->toHaveCount(1);
});
