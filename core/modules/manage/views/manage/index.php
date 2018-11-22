<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.11.2018
 * Time: 0:33
 */
use yii\grid\GridView;

?>
<?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        'title',
        'content',
        'status',

        [
            'class'=>\core\modules\manage\gridview\StatusColumn::class
        ],
    ],
]); ?>