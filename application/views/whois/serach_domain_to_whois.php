
<h1>Whois로 기관 이전 하기</h1>
<form action="" method="post">
    <input type="text" name="domain" value="<?=$domain?>">
    <input type="submit">
</form>


<form action="/whoisApi/domain_to_whois_regist" method="post">
<table>
    <tbody>
    <?php foreach($db as $key=>$val): ?>
    <tr>
        <td><?php echo $val['domain'];?> <input type="hidden" name="domain" value="<?php echo $val['domain'];?>"></td>
        <td><button>기관이전</button> </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</form>