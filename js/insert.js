var rumor_week_url = "../index.html";
var rumor_all_url = "../index_all.html";

window.onload = function(){
  $('.sideNavi:eq(2)').find('.content').empty();
  $('.sideNavi:eq(2)').find('.content').append('<iframe src="'+rumor_week_url+'" width="220" height="231">');
  $('.sideNavi:eq(2)').find('.more').empty();
  $('.sideNavi:eq(2)').find('.more').append('<a href="'+rumor_all_url+'"><span>一覧を見る</span></a>');
}
