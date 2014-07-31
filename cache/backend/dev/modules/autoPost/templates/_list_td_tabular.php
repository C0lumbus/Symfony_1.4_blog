<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($Article->getId(), 'article_edit', $Article) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_title">
  <?php echo $Article->getTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_content">
  <?php echo $Article->getContent() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($Article->getCreatedAt()) ? format_date($Article->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
