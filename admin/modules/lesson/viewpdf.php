<?php
if(!isset($_SESSION['USERID'])){
  redirect(web_root."admin/index.php");
}
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?>
<h2><?php echo $title ; ?></h2>
<p style="font-size: 18px;font-weight: bold;">Chapter : <?php echo $res->LessonChapter;?> | Title : <?php echo $res->LessonTitle;?></p>
<div class="container">
	<embed src="<?php echo web_root.'admin/modules/lesson/cbasics.pdf'; ?>" type="application/pdf" width="100%" height="400px" />
</div> 
