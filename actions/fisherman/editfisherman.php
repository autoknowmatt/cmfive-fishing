<?php

function editfisherman_GET(Web $w)
{
    // NEED TO ADD PATH MATCH FOR AUTOFILL FOR EDITING 
    // START WITH ADDING FIRST NEEDS FIXING FOR EDIT FUNCTION
    // $p = $w->pathMatch("id");
    // if (!empty($p['id'])){
    //     $fisherman = FishingService::getInstance($w)->getFishermanForId($p['id']);
    //     $user = $fisherman->getUser();
    //     $cio


    $form = [
        "User Details" => [
            [
                ["Login", "text", "login"],
            ], [
                ["Password", "password", "password"],
                ["Repeat Password", "password", "password2"]
            ],
        ],
            "Contact Details" => [
                [
                    ["First Name", "text", "firstname"],
                    ["Last Name", "text", "lastname"]
                ],
                [
                    ["Home Phone", "text", "homephone"],
                    ["Mobile", "text", "mobile"],
                    ["Email", "text", "email"]
                ]
            ]
        ];

    $post_url = '/fishing-fisherman/editfisherman';
    // NEED TO ADD PATH MATCH FOR AUTOFILL FOR EDITING
    // if (!empty($p['id'])) {
    //     $post_url .= "/" . $teacher->id;
    // }
    $w->out(Html::multiColForm($form, $post_url));

}

function editfisherman_GET(Web $w)
{
    $p = $w->path
}