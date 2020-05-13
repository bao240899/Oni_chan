
<div class="container">
    <h2>Comment</h2>
    <div class="row">
        <div class="col-8">
            <?php while($fields=mysqli_fetch_array($data["comment"])){
                ?>
                    <div class="card card-white post">
                <div class="post-heading">
                    <div class="float-left image">
                        <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    </div>
                    <div class="float-left meta">
                        <div class="title h5">
                            <a href="#"><b><?=$fields["userID"]?></b></a>
                            made a post.
                        </div>
                        <h6 class="text-muted time"><?=$fields["date"]?></h6>
                    </div>
                </div> 
                <div class="post-description"> 
                    <p><?=$fields["content"]?></p>

                </div>   
            </div>
            <hr>
                <?php
            }?>     
            <form method="POST" action="../commentProcess">
                <tr>
                    <th>
                        comment
                    </th>
                </tr>
                <tr>
                    <td>
                    <input type="hidden" name="userID" value="<?=$_SESSION["userID"]?>">
                    <input type="hidden" name="mangaID" value="<?=$data["mangaID"]?>">
                    <input type="hidden" name="date" value="<?=date('Y-m-d H:i:s')?>">
                    <textarea name="content" class="form-control" rows="5" id="comment"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                    <button class="btn btn-primary" type="submit" name="btnAddComment">add comment</button>
                    </td>
                </tr>
            </form>
        </div>
        
    </div>
</div>
<style>
    .card-white .card-heading {
    color: #333;
    background-color: #fff;
    border-color: #ddd;
    border: 1px solid #dddddd;
}

.card-white .card-footer {
    background-color: #fff;
    border-color: #ddd;
}

.card-white .h5 {
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.card-white .time {
    font-size: 12px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.post .post-heading {
    height: 95px;
    padding: 20px 15px;
}

.post .post-heading .avatar {
    width: 60px;
    height: 60px;
    display: block;
    margin-right: 15px;
}

.post .post-heading .meta .title {
    margin-bottom: 0;
}

.post .post-heading .meta .title a {
    color: black;
}

.post .post-heading .meta .title a:hover {
    color: #aaaaaa;
}

.post .post-heading .meta .time {
    margin-top: 8px;
    color: #999;
}

.post .post-image .image {
    width: 100%;
    height: auto;
}

.post .post-description {
    padding: 15px;
}

.post .post-description p {
    font-size: 14px;
}

.post .post-description .stats {
    margin-top: 20px;
}

.post .post-description .stats .stat-item {
    display: inline-block;
    margin-right: 15px;
}

.post .post-description .stats .stat-item .icon {
    margin-right: 8px;
}

.post .post-footer {
    border-top: 1px solid #ddd;
    padding: 15px;
}

.post .post-footer .input-group-addon a {
    color: #454545;
}

.post .post-footer .comments-list {
    padding: 0;
    margin-top: 20px;
    list-style-type: none;
}

.post .post-footer .comments-list .comment {
    display: block;
    width: 100%;
    margin: 20px 0;
}

.post .post-footer .comments-list .comment .avatar {
    width: 35px;
    height: 35px;
}

.post .post-footer .comments-list .comment .comment-heading {
    display: block;
    width: 100%;
}

.post .post-footer .comments-list .comment .comment-heading .user {
    font-size: 14px;
    font-weight: bold;
    display: inline;
    margin-top: 0;
    margin-right: 10px;
}

.post .post-footer .comments-list .comment .comment-heading .time {
    font-size: 12px;
    color: #aaa;
    margin-top: 0;
    display: inline;
}

.post .post-footer .comments-list .comment .comment-body {
    margin-left: 50px;
}

.post .post-footer .comments-list .comment>.comments-list {
    margin-left: 50px;
}
</style>