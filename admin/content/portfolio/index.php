<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

use Develop\Classes\Database\Tables\ProjectsTable;
use Develop\Classes\Database\Tables\ProjectsTypeTable;

$projectsList = ProjectsTable::select([
	'select' => [
		'Projects.id', 'ProjectsType.name as type', 'Projects.name', 'Projects.date', 'short_description',
	],
	'join' => [
		'type' => 'INNER',
		'table' => 'Develop\Classes\Database\Tables\ProjectsTypeTable',
		'on' => [
			'type_id' => 'id'
		]
	]
]);

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container">
    <div class="page-block">
        <div class="page-title page-title--center page-title--padding-25">Проекты портфолио</div>
    </div>

	<div class="display-grid grid-justify--around">
		<div class="table-wrapper table-wrapper--center" style="max-width: 90%">
			<table class="table">
				<thead class="table-header">
				<tr>
					<th>id</th>
					<th>название</th>
					<th>Тип</th>
					<th>Описание</th>
					<th>Дата</th>
					<th></th>
				</tr>
				</thead>
				<tbody class="table-body">
				<?php foreach ([0, 1, 2, 3] as $test): ?>
                    <?php foreach ($projectsList as $project): ?>
						<tr>
							<td><?= $project['id'] ?></td>
							<td style="min-width: 200px"><?= $project['name'] ?></td>
							<td><?= $project['type'] ?></td>
							<td style=""><?= $project['short_description'] ?></td>
							<td><?= $project['date'] ?></td>
							<td>
								<div class="btn-group horizontal">
									<button class="btn btn-medium btn-squire btn-edit btn--info"></button>
									<button class="btn btn-medium btn-squire btn-close btn--danger"></button>
								</div>
							</td>
						</tr>
                    <?php endforeach; ?>
				<?php endforeach; ?>

				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>