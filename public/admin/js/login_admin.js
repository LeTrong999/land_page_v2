jQuery(document).ready(function($) {
    $('#btn_submit_login').click(function(event){
    event.preventDefault();
    var email = $('input[name=txt_email]').val();
    var password = $('input[name=txt_password]').val();
    var data = {email:email,password:password};
    console.log(data);
    $.ajax({
        url: 'http://localhost:8082/myNextProject/api/auth/login',
        type: 'POST',
        data: data,
        success: function(data){
            console.log(data);
        },
        error:  function(jqXHR,status, errorThrown){
	                my_error(jqXHR.status);
	            }
        });
    });

});

function my_error(error){
    switch(error) {
        case 400:
            var text = "Bad Request - Request không hợp lệ hoặc bị lỗi khi trao đổi dữ liệu với trình duyệt.";
            break;
        case 401:
            var text = "Unauthorized - Access Token của bạn hết hạn hoặc không hợp lệ.";
            break;
        case 403:
            var text = "Forbidden - Bạn không được quyền truy cập tài nguyên ngày('email hoặc password không hợp lệ').";
            break;
        case 404:
            var text = "Not Found - Tài nguyên bạn muốn truy xuất không tồn tại hoặc đã bị xóa.";
            break;
        case 405:
            var text = "Method Not Allowed - Đường dẫn bạn truy cập không tồn tại.";
            break;
        case 422:
            var text = "Unprocessable Entity - Dữ liệu của bạn gửi lên không hợp lệ hoặc bị lỗi.";
            break;
        case 429:
            var text = "Too Many Requests - Bạn gửi request quá nhanh và đã bị giới hạn truy cập.";
            break;
        case 500:
            var text = "Internal Server Error - Hệ thống Server của Teamcrop đang có vấn đề hoặc không truy cập được.";
            break;
        case 503:
            var text = "Service Unavailable - Hệ thống tạm thời không truy cập được, có thể là chúng tôi đang bảo trì hoăc bị sự cố. Hãy vui lòng thử lại sau.";
            break;
    }

    return console.log(text);
}