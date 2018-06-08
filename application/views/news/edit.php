<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2><?php echo $title; ?></h2>
 
 <?php echo validation_errors(); ?>
  
 <?php echo form_open('news/edit/'.$news_item['id']); ?>
     <table>
         <tr>
             <td><label for="title">Title</label></td>
             <td><input type="input" name="title" size="50" value="<?php echo $news_item['title'] ?>" /></td>
         </tr>
         <tr>
             <td><label for="text">Text</label></td>
             <td><textarea name="text" rows="10" cols="40"><?php echo $news_item['text'] ?></textarea></td>
         </tr>
         <tr>
             <td></td>
             <td><input type="submit" name="submit" value="Edit news item" /></td>
         </tr>
     </table>
 </form>
    
</body>
</html>
