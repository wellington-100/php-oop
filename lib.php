<?
class Post {
    private $title;
    private $body;
    private $author;
    private $publishedAt;

    public function __construct($title, $body, $author, $publishedAt) {
        $this -> title = $title;
        $this -> body = $body;
        $this -> author = $author;
        $this -> publishedAt = $publishedAt;
    }

    public function renderAsHTML(){
        print("
            <article>
            <h1>{$this->title}</h1>
            <p>{$this->body}</p>
            <footer>Author: {$this->author}</footer>
            <time> published at: {$this->publishedAt}</time>
            </article>
        ");
    }

    public function renderAsXML()
    {
        print ("
            <post>
            <title>{$this->title}</title>
            <body>{$this->body}</body>
            <author>Author: {$this->author}</author>
            <publishedAt> published at: {$this->publishedAt}</publishedAt>
            </post>
        ");
    }

    public function renderAsJSON()
    {
        $post = [
            "title" => $this->title,
            "body" => $this->body,
            "author" => $this->author,
            "publishedAt" => $this->publishedAt
        ];
        print (json_encode($post, JSON_PRETTY_PRINT));
    }

}