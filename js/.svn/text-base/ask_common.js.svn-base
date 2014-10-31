$(document).ready(function(){
    if (typeof(g_cid1) != 'undefined') {
        $('#indus_pid option[class="p_' + g_cid1 + '"]').unwrap();
    }
    if (typeof(p_cid2) != 'undefined') {
        $('#indus_pid option[class="p_' + p_cid2 + '"]').unwrap();
    }
    if (typeof(c_cid3) != 'undefined') {
        $('#indus_id option[class="c_' + c_cid3 + '"]').unwrap();
    }
});

function askCheckLogin() {
    if (typeof(uid)=='undefined' || isNaN(uid) || uid==0) {
        showWindow('askElbox', false, 'index.php?do=ajax&view=login');
        return false;
    } else {
        return true;
    }
}

function askReleaseCheck(frm_id) {
    var i = checkForm(document.getElementById(frm_id));
    if (i) {
        if (askCheckLogin()) {
            $('#' + frm_id).submit();
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function askForCheck(uid) {
    if (askCheckLogin()) {
        showWindow('askElbox', false, '/index.php?do=ask&view=ajax&ajax_uid=' + uid, 1, 'get', 0);
    } else {
        return false;
    }
}