<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Article->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $Article->getTitle() ?></td>
    </tr>
    <tr>
      <th>Content:</th>
      <td><?php echo $Article->getContent() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $Article->getCreatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('post/edit?id='.$Article->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('post/index') ?>">List</a>
