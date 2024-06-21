<?
include 'lib.php';

$post = new Post(
    'Post title',
    'Body of the post',
    'Jhon Doe',
    '21 June 2024'
);

$post->renderAsHTML();

$post->renderAsXML();

$post->renderAsJSON();