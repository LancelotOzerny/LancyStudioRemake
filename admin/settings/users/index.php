<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

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
					<th>Уровень прав</th>
				</tr>
				</thead>
				<tbody class="table-body">
				<tr>
					<td>0</td>
					<td>Логин</td>
					<td>Создан</td>
					<td>Уровень прав</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Логин</td>
					<td>Создан</td>
					<td>Уровень прав</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Логин</td>
					<td>Создан</td>
					<td>Уровень прав</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>