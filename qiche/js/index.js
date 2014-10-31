$(function() {
    $("#book_file").filestyle({
        image: "images/t4-b2.png",
        imageheight : 75,
        imagewidth : 100,
        width : 100,
    });
	
});

function showupload(){
	$("#showupload").html("已选择一张图片！");
}
function getCars(selobj, selectobj_car, brand_id) {
	if (selobj == '') {
		ids = brand_id;
	} else {
		ids = $(selobj).val();
	}

    $('#' + selectobj_car).children('optgroup').remove();
    $('#' + selectobj_car).children('option').remove();
    $('#selectcar_style').val('');
    $('#selectcar_name').val('');
    if (ids.length == 0) {
        return false;
    }

    getUrl = "http://wap.y1s.cn/y1s/ajaxgetcar";
    params = {'brand_id': ids};
    $.get(getUrl, $.param(params), function (rs) {
        if (rs.status != '1') {
            alert(rs.info);
        } else {
            for (key in rs.data) {
                tmpParent = null;
                //alert(rs.data);
                if (rs.data[key].groupname.length > 0) {
                    tmpParent = $('<optgroup>').attr('label', rs.data[key].groupname);
                }
                for (okey in rs.data[key].optionlist) {
                    tmpOption = $('<option>').text(rs.data[key].optionlist[okey].carname).val(rs.data[key].optionlist[okey].car_id).attr('carstyle', rs.data[key].optionlist[okey].carstyle);
                    if (rs.data[key].optionlist[okey].selected) {
                        tmpOption.attr('selected', true);
                    }
                    if (tmpParent) {
                        tmpParent.append(tmpOption);
                    } else {
                        $('#' + selectobj_car).append(tmpOption);
                    }

                }
				//alert(tmpParent);
                if (tmpParent) {
                    $('#' + selectobj_car).append(tmpParent);
                }

            }
            $('#' + selectobj_car).change();
        }
    }, 'json');
}
function submitForm(){
	var brname = $("#car_brand").find("option:selected").text();
	
	var cname = $("#car_id").find("option:selected").text();
	var servicename = $("#service").find("option:selected").text(); 
	$("#brname").val(brname);
	$("#cname").val(cname);
	$("#servicename").val(servicename);
	$("#bookForm").submit();
}