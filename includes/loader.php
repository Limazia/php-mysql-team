<?php
require __DIR__ . '/init.php';
$qRes = "SELECT * FROM groups ORDER BY group_id ASC";
$qQuery = $mysqli->query($qRes);

if ($qQuery->num_rows > 0){
while($qRow = $qQuery->fetch_assoc()){

$eRes = "SELECT COUNT(*) FROM users u JOIN groups g ON u.id_group = {$qRow['group_id']} WHERE g.group_id = id_group";
$eQuery = $mysqli->query($eRes);

$eCount = $eQuery->fetch_row();
$eReplace = number_format($eCount[0] ,0, ',', ',');

$groupName = $qRow['group_name'];
$replaceGroupName = strtolower($groupName);
?>
<div class="card" style="margin-bottom: 20px;">
	<div class="card-body">
        <h5 class="card-title"><b><?php echo $qRow['group_name']; ?></b> <small class="text-muted">(<?php echo $eCount[0]; ?>)</small></h5>
        <?php 
        $wRes = "SELECT * FROM users u JOIN groups g WHERE u.id_group = {$qRow['group_id']} ORDER BY u.id ASC";
        $wQuery = $mysqli->query($wRes);

        if ($wQuery->num_rows > 0){
        while($wRow = $wQuery->fetch_assoc()){

            $groupName = $wRow['group_name'];
            $replaceGroupName = strtolower($groupName);
        ?>
        <?php if($wRow['group_id'] == $wRow['id_group']){ ?>
            <span class="card-text badge badge-primary"><?php echo $wRow['username']; ?></span>
        <?php } ?>
        <?php } ?>
        <?php }else{ ?>
        <div class="well text-center">
	        <span>Nenhum usuário foi encontrado</span>
        </div>
        <?php } ?>
	</div>
</div>
<?php } ?>
<?php } ?>
 