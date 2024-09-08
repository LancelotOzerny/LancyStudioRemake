<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

use \Develop\Classes\Database\Tables\RoutesTable;

$routesList = RoutesTable::select([
	'order' => [
		'by' => 'sort',
		'direction' => 'desc'
	]
]);

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container" style="padding-left: 40px">
    <div class="page-block">
        <div class="page-title page-title--center page-title--padding-25">Список маршрутов</div>
    </div>

	<div class="display-grid grid-justify--around">
		<div class="table-wrapper table-wrapper--center" style="max-width: 90%">
			<table class="table">
				<thead class="table-header">
				<tr>
					<th>id</th>
					<th>Маршрут</th>
					<th>Уровень прав</th>
					<th>Шаблон</th>
					<th>Сортировка</th>
					<th></th>
				</tr>
				</thead>
				<tbody class="table-body">
				<?php foreach ($routesList as $route): ?>
					<tr>
						<td><?= $route['id'] ?></td>
						<td style="min-width: 200px"><?= $route['route'] ?></td>
						<td><?= $route['rights_level'] ?></td>
						<td style=""><?= $route['template'] ?></td>
						<td><?= $route['sort'] ?></td>
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