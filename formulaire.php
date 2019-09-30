<div class="row">

  <div class="container, col-sm-6">
    <form enctype="multipart/form-data" action="" method="post">

      <label for="title">TITLE</label>
      <input type="text" id="fname" name="title" value=<?php echo $title; ?> >

      <label for="content">CONTENT</label>
      <textarea id="subject" name="content" placeholder="" style="height:200px"  value=<?php echo $content; ?> ></textarea>

      <label for="fic">IMAGE</label>
      <!-- <textarea id="subject" name="subject"  style="height:200px"></textarea> -->
      <input type="hidden" name="MAX_FILE_SIZE" value="800000" />    <!--taile maxi de l image 0.8 Mo  -->
      <input type="file" name="fic" size=50   />
      <input type="submit" value="send" name="submit"/>
    </form>
  </div>
