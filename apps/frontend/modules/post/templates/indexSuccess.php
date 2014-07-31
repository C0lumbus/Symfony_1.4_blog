<h1>Articles List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Content</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Articles as $Article): ?>
    <tr>
      <td><a href="<?php echo url_for('post/show?id='.$Article->getId()) ?>"><?php echo $Article->getId() ?></a></td>
      <td><?php echo $Article->getTitle() ?></td>
      <td><?php echo $Article->getContent() ?></td>
      <td><?php echo $Article->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('post/new') ?>">New</a>
