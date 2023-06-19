<style>
    #baca-btn{
        background-color: cyan;
        margin: 10px;
        padding: 10px 30px;
    }
</style>
<?php
include 'connection.php';

$post_table = mysqli_query($conn, "SELECT * FROM post_table");
$user_table = mysqli_query($conn, "SELECT * FROM user_table");
$user_by_id_post = "SELECT post_table.id_post, user_table.name_user
          FROM post_table
          INNER JOIN user_table ON post_table.id_user = user_table.id_user";

$user_by_id_post_result = mysqli_query($conn, $user_by_id_post);

$user_names = array();
if (mysqli_num_rows($user_by_id_post_result) > 0) {
    while ($name_user = mysqli_fetch_assoc($user_by_id_post_result)) {
        $user_names[$name_user['id_post']] = $name_user['name_user'];
    }
}

foreach ($post_table as $post){
    $id_post = $post['id_post'];

    $function_total_like = mysqli_query($conn, "SELECT function_total_like($id_post) AS total_like");
    $total_like = mysqli_fetch_assoc($function_total_like)['total_like'];

    $function_total_comment = mysqli_query($conn, "SELECT function_total_comment($id_post) AS total_like");
    $total_comment = mysqli_fetch_assoc($function_total_comment)['total_like'];

    echo "
    <hr color='grey' size='4'>
    <div>
    ".$post['date_post']."
        <div>
        <p>".$post['title_post']."</p>
        <p>".$user_names[$id_post]."</p>
            <div>
            ".$post['content_post']."
            </div>
            <button onclick=\"location.href='dummy2_php.php?data-id=".$id_post."'\" id='baca-btn'>Ke file dummy2_php.php</button>
            <div>
            <img src='data:image/png;base64,".base64_encode($post['image_post'])."' style='width: 300px'>
                <div>
                    <p>JUMLAH LIKE: ".$total_like."</p>
                    <p>JUMLAH COMMENT: ".$total_comment."</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr color='black' size='8'>
    ";
}
?>
