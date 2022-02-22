<?php
$comments = new commentsController();
$posts = new postsController();
if (isset($_POST['find'])) {
    $postList = $posts->findposts();
} else {
    $postList = $posts->getAllposts();
}

if (isset($_POST['submit'])) {
    $comments->addcomment();
}

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="assest/css/post.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>


    <div class="card-body bg-light">
        <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">
            <i class="fas fa-plus"></i>
        </a>
        <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
            <i class="fas fa-home"></i>
        </a>
        <a href="<?php echo BASE_URL; ?>logout" title="Déconnexion" class="btn btn-link mr-2 mb-2">
            <i class="fas fa-user mr-2">
                <?php echo $_SESSION['username']; ?>
            </i>
        </a>
        <form method="post" class="float-right mb-2 d-flex flex-row">
            <input type="text" class="form-control" name="search" placeholder="search">
            <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="main-section">
        <?php foreach ($postList as $post) : ?>
        <div class="content">
            <?php if($_SESSION['user-id'] == $post['userId']):?>
                <div class="edit-remove">
                    <form method="post" class="mr-1" action="update">
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                    </form>
                    <form method="post" class="mr-1" action="delete">
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            <?php endif;?>
        <div class="top-section">
            <div class="user-img">
                <img src="http://nicesnippets.com/demo/man.png">
            </div>

            <div class="user-detail">
                <p>Andrew Filander</p>
                <span>
                    <?php echo $post['type']; ?>-
                    <?php echo $post['published_at']; ?>
                </span>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="comment-content">
            <span class="title">
                <?php echo $post['title']; ?>
            </span>
        </div>
        <div class="comment-content">
            <span>
                <?php echo $post['description']; ?>
            </span>
        </div>
        <div class="sub-comment"></div>
        <div class="comment-box box">
            <img src="<?php echo $post['picture']; ?>" alt="" class="post-image">

            <div style="clear:both;"></div>


        </div>
    </div>
    <?php 
            $commentList = $comments->getAllByPostId($post["id"]);
            foreach ($commentList as $comment) : ?>
    <span>
        <?php echo $comment['text']; ?><br />
    </span>
    <?php endforeach; ?>
    <form method="post">
        <div class="add-comment">
            <div class="box">
                <div style="clear:both;"></div>
            </div>
            <div class="comment-btn">
                <input type="textarea" name="content" class="text" rows="10" cols="30" placeholder="Add a comment...">
            </div>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

            <div class="add-comment-text-btn">
                <input type="submit" name="submit" class="post-comment-btn">
                <button class="cancel-btn">Cancel</button>
            </div>
        </div>

    </form>
    <?php endforeach; ?>
    </div>
</body>

</html>