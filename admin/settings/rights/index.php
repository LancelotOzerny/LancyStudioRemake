<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

use Develop\Classes\Database\Tables\RightsTable;

$rightsList = RightsTable::select();

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container" style="padding-left: 40px">
    <div class="page-block">
        <div class="page-title page-title--center page-title--padding-25">Список пользовательских прав</div>
	</div>

	<div class="display-grid grid-justify--around">
		<div class="table-wrapper table-wrapper--center" style="max-width: 90%">
			<table class="table">
				<thead class="table-header">
				<tr>
					<th>id</th>
					<th>Название</th>
					<th>Уровень прав</th>
					<th></th>
				</tr>
				</thead>
				<tbody class="table-body">
                <?php foreach ($rightsList as $right): ?>
					<tr>
						<td><?= $right['id'] ?></td>
						<td style="min-width: 200px"><?= $right['name'] ?></td>
						<td><?= $right['level'] ?></td>
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