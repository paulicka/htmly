<?php $desc = get_category_info(null); ?>

<a href="<?php echo site_url();?>add/category"><?php echo i18n('Add_category');?></a>
<table class="category-list">
    <tr class="head">
        <th>Name</th>
        <th><?php echo i18n('Description');?></th>
        <th><?php echo i18n('Contents');?></th>
        <th><?php echo i18n('Operations');?></th>
    </tr>
    <tr>
        <td><a href="<?php echo site_url();?>category/uncategorized" target="_blank"><?php echo i18n("Uncategorized");?></a></td>
        <td><p><?php echo i18n('Uncategorized_comment');?>.</p></td>
        <td><?php $total = get_draftcount('uncategorized') + get_categorycount('uncategorized'); echo $total?></td>
        <td></td>
    </tr>
    <?php foreach ($desc as $d):?>
    <tr>
        <td><a href="<?php echo $d->url;?>" target="_blank"><?php echo $d->title;?></a></td>
        <td><?php echo $d->description;?></td>
        <td><?php $total = get_draftcount($d->md) + get_categorycount($d->md); echo $total?></td>
        <td><a href="<?php echo $d->url;?>/edit?destination=admin/categories"><?php echo i18n('Edit');?></a> <?php if (get_categorycount($d->md) == 0 && get_draftcount($d->md) == 0 ){echo '<a href="' . $d->url . '/delete?destination=admin/categories">' . i18n('Delete') . '</a>';}?></td>
    </tr>
    <?php endforeach;?>
</table>
