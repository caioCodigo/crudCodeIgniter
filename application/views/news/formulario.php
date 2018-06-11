<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>submit</title>
</head>
<body>
    <h1>form</h1>
    <?php echo form_open('to_submit_form') ?>
    adding input
        <?php

        foreach ($news as $news_item):
            $valor[] = $news_item['id'];
            
        endforeach;

            $input_data = array(
                'name' => 'input_1',
                'type' => 'checkbox',
                'value' =>  $valor[0]
            );
            $input_data2 = array(
                'name' => 'input_2',
                'type' => 'checkbox',
                'value' =>  $valor[1]
            );
            $input_data3 = array(
                'name' => 'input_3',
                'type' => 'checkbox',
                'value' =>  $valor[2]
            );
            echo form_input($input_data);
            echo form_input($input_data2);
            echo form_input($input_data3);
      
        ?>
    <?php echo form_submit('name_of_submit','submit')?>
    <?php echo form_close(); ?>
</body>
</html>