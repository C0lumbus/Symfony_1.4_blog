<td colspan="4">
  <?php echo __('%%id%% - %%title%% - %%content%% - %%created_at%%', array('%%id%%' => link_to($Article->getId(), 'article_edit', $Article), '%%title%%' => $Article->getTitle(), '%%content%%' => $Article->getContent(), '%%created_at%%' => false !== strtotime($Article->getCreatedAt()) ? format_date($Article->getCreatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
