$(document).ready(function(){
    //check password
	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();
		$.ajax({
			type:'post',
			url:'/admin/check-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				// alert(resp);
				if(resp=="false"){
					$("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>");
				}else if(resp=="true"){
					$("#chkPwd").html("<font color='green'>Current Password is Correct</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});


	//daynamic delete function 
	$(".confirmDelete").click(function(){
			var record =$(this).attr('record');
			var recoedid =$(this).attr('recoedid');

			Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					window.location.href="/admin/delete-"+record+"/"+recoedid;
				}
			});

		});

		//category status active or inactive
		$(".updateCategoryStatus").click(function(){
			var status = $(this).children("i").attr("status");
			var category_id = $(this).attr("category_id");
	
			$.ajax({
				type:"post",
				url:"/admin/update-category-status",
				data:{status:status,category_id:category_id},
				success:function(resp){
					// alert(resp['status']);
					// alert(resp['category_id']);
					if (resp['status']==0) {
						$("#category-"+category_id).html("<i class='btn btn-sm  btn-warning far fa-bookmark' status='Inactive'></i>");
					}else if(resp['status']==1){
						$("#category-"+category_id).html("<i class='btn btn-sm  btn-warning fas fa-bookmark' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});
});
