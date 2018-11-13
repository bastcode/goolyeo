
<style>
    label+input {width:200px; margin-left:150px}
    label:before { content: '\a' ; white-space: pre; }    
</style>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $(document).ready(function(){

        $('label').click(function () {
            
            $(this).find('+ input').focus();
        });
    });
</script>

<h1>Whois로 도메인 등록</h1>
<form action="domain_regist_proc" method="post">
    <label>도메인명</label><input type="text" name="arr_domain_name[]" value="">
    <label>도메인타입</label><input type="text" name="arr_domain_type[]" value=".net">
    <label>등록기간</label><input type="text" name="arr_term[]" value="1">
    <label>등록자 이름</label><input type="text" name="reg_name_loc" value="임현숙">
    <label>등록자 영문이름</label><input type="text" name="reg_name_eng" value="lim">
    <label>소유자 이메일</label><input type="text" name="reg_email" value="lim@blueweb.co.kr">
    <label>소유자 우편번호</label><input type="text" name="reg_zipcode" value="12345">
    <label>소유자 주소</label><input type="text" name="reg_address_loc1" value="서울">
    <label>소유자 상세주소</label><input type="text" name="reg_address_loc2" value="밸리 1차">
    <label>소유자 영문주소1</label><input type="text" name="reg_address_eng1" value="vaili 1cha">
    <label>소유자 영문주소2</label><input type="text" name="reg_address_eng2" value="seoul">
    <label>소유자 연락처</label><input type="text" name="reg_telephone" value="01011112222">
    <label>팩스</label><input type="text" name="reg_fax" value="025656345">
    <label>등록 국가</label><input type="text" name="reg_nation" value="KR">
    <label>후이즈맴버 옵션</label><input type="text" name="member" value="">
    <label>네임서버 호스트명</label><input type="text" name="arr_host_name[]" value="ns4.blueweb.co.kr">
    <label>네임서버 호스트명</label><input type="text" name="arr_host_name[]" value="ns5.blueweb.co.kr">
    <label>네임서버 아이피</label><input type="text" name="arr_host_ip[]" value="211.202.2.4">
    <label>네임서버 아이피</label><input type="text" name="arr_host_ip[]" value="210.205.6.9">

    <input type="submit">
</form>

