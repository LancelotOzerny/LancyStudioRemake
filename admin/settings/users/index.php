<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

use Develop\Classes\Database\Tables\UsersTable;

$userList = UsersTable::select([
	'select' => [
		'Users.id', 'login', 'Users.date', 'Rights.name as rights'
	],
	'join' => [
		'table' => 'Develop\Classes\Database\Tables\RightsTable',
		'on' => [
			'rights_id' => 'id'
		]
	]
]);

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container" style="padding-left: 40px">
    <div class="page-block">
        <div class="page-title page-title--center page-title--padding-25">Список пользователей</div>
    </div>

	<div class="display-grid grid-justify--around">
		<div class="table-wrapper table-wrapper--center">
			<table class="table">
				<thead class="table-header">
				<tr>
					<th>id</th>
					<th>Логин</th>
					<th>Создан</th>
					<th>Права</th>
					<th></th>
				</tr>
				</thead>
				<tbody class="table-body">
				<?php foreach ($userList as $user): ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><?= $user['login'] ?></td>
						<td><?= $user['date'] ?></td>
						<td><?= $user['rights'] ?></td>
						<td>
							<div class="btn-group horizontal">
								<button class="btn btn-medium btn-squire btn-edit btn--info"></button>
								<button class="btn btn-medium btn-squire btn-close btn--danger"></button>
							</div>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>