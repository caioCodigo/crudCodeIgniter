<h2><?php echo base_url(); echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
        <td><strong>excluir</strong></td>
    </tr>
    
    
<?php foreach ($news as $news_item): ?>
    <form action="to_submit_form" method="post">
        <tr>
            <td><?php echo $news_item['title']; ?></td>
            <td><?php echo $news_item['text']; ?></td>
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>

            <td><?php
            $input_data = array(
                'name' => 'input',
                'type' => 'checkbox',
                'value' =>  $news_item['id']
            );
            echo form_input($input_data);
            ?></td>
<?php endforeach; ?> 

    <?php echo form_submit('name_of_submit','Excluir marcados')?>
    <?php echo form_close(); ?>

    </form>





</table>