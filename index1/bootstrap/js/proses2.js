// JavaScript Document
var xmlhttp;
/* profil */
function cetak(){
	var url="./crud/cetak/cetak.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function scr(){
	var url="./crud/upload/scr.php?rand="+Math.random();
	var post="";
	ajax(url,post,"foto")
}
	function upload(){
		var url="./crud/upload/uploadimage.php?rand="+Math.random();
		var post="";
		ajax(url,post,"isi");
		}
	function cetak_cari(kdedit){
		var url="./crud/cetak/cari.php";
		var post="kdedit="+kdedit;
		var response="cari";
		ajax(url,post,response);
		}
	function upload_cari(kdedit){
		var url="./crud/upload/upload_cari.php";
		var post="kdedit="+kdedit;
		var response="aksi";
		ajax(url,post,response);
		}
	/* auto enter profil */
	$(document).ready(function(){
  setTimeout(prof,900);
  $('#enterTb').keypress(function (e) {
       if (e.which == 13) {
          prof();
    }
    });
		});
	function prof(){
		var url="./crud/profil/profil.php?rand="+Math.random();
		var post="";
		ajax(url,post,"aksi");
		}
		/* end auto enter profil */
		function lihat(klihat){
			var url="./crud/cetak/lihat.php";
			var post="klihat="+klihat;
			var response="lihat";
			ajax(url,post,response);
			}
		function flihat(flihat){
			var url="./crud/upload/lihat.php";
			var post="flihat="+flihat;
			var response="foto";
			ajax(url,post,response);
			}
		function lihatedit(klihat){
			var url="./crud/cetak/lihatupload.php";
			var post="klihat="+klihat;
			var response="lihat";
			ajax(url,post,response);
			}
	/**/
function siswak(){
	var url="./crud/siswa/tampil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function siswa_tam(){
	var url="./crud/siswa/tambah.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function siswa_simp(){
	var nis=document.getElementById("nis").value;
	var nama=document.getElementById("nama").value;
	var tempat=document.getElementById("tempat").value;
	var tgl=document.getElementById("tanggal").value;
	var agama=document.getElementById("agama").value;
	var kelamin=document.getElementById("kelamin").value;
	var alamat=document.getElementById("alamat").value;
	var npsn=document.getElementById("npsn").value;
	var url='crud/siswa/simpan.php';
	var post='nis='+nis+"&nama="+nama+"&tempat="+tempat+"&tgl="+tgl+"&agama="+agama+"&kelamin="+kelamin+"&alamat="+alamat+"&npsn="+npsn;
	ajax(url,post,"isi");
	alert("Data Berhasil Disimpan");
	return true;
	}
function siswa_update(){
	var nis=document.getElementById("nis").value;
	var nama=document.getElementById("nama").value;
	var tempat=document.getElementById("tempat").value;
	var tgl=document.getElementById("tanggal").value;
	var agama=document.getElementById("agama").value;
	var kelamin=document.getElementById("kelamin").value;
	var alamat=document.getElementById("alamat").value;
	var npsn=document.getElementById("npsn").value;
	var url='crud/siswa/update.php';
	var post='nis='+nis+"&nama="+nama+"&tempat="+tempat+"&tgl="+tgl+"&agama="+agama+"&kelamin="+kelamin+"&alamat="+alamat+"&npsn="+npsn;
	ajax(url,post,"isi");
	alert("Data Berhasil Disimpan");
	return true;
	}
function siswa_hapus(kdhapus){
		var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
		var url="./crud/siswa/hapus.php";
		var post="kdhapus="+kdhapus;
		var response="isi";
		ajax(url,post,response);
		alert("anda telah Menghapus");
		return true;
		}
	else{
		alert("Hapus Batal")
		return false;
		}
	}
function siswa_edit(kdedit){
	var url="./crud/siswa/edit.php";
	var post="kdedit="+kdedit;
	var response="isi";
	ajax(url,post,response);
	}
function siswa_cari(kdedit){
	var url="./crud/siswa/cari.php";
	var post="kdedit="+kdedit;
	var response="cari";
	ajax(url,post,response);
	}
function profil(){
	var url="./crud/profil/profil.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
}
function user(){
	var url="./crud/user/user.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function user_tam(){
	var url="./crud/user/user_tam.php?rand="+Math.random();
	var post="";
	ajax(url,post,"isi");
	}
function user_edit(kdedit){
	var url="./crud/user/user_update.php";
	var post="kdedit="+kdedit;
	var response="aksi";
	ajax(url,post,response);
	}

function users_update(){
	var i=document.getElementById("id_user").value;
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var n=document.getElementById("nama").value;

	var url='crud/user/user_update_simpan.php';
	var post='i='+i+"&u="+u+"&p="+p+"&n="+n;
	ajax(url,post,"hasil");
	}

function user_simpan(){
	var i=document.getElementById("iduser").value;
	var u=document.getElementById("username_u").value;
	var p=document.getElementById("password_u").value;
	var k=document.getElementById("nama").value;

	var url='crud/user/user_tambah.php';
	var post='i='+i+"&u="+u+"&p="+p+"&k="+k;
	ajax(url,post,"aksi");
	alert("Data Berhasil Disimpan");
	return true;
	}

function user_hapus(kdhapus){
		var konfirmasi=confirm("anda yakin hapus ?");
	if (konfirmasi){
		var url="./crud/user/user_hapus.php";
		var post="kdhapus="+kdhapus;
		var response="aksi";
		ajax(url,post,response);
		alert("anda telah Menghapus");
		return true;
		}
	else{
		alert("Hapus Batal")
		return false;
	}
}

/* proses js*/
function out_response(response){

	if(response=="tampil"){
		document.getElementById("tampil").innerHTML=xmlhttp.responseText;
		}
		if(response=="cari"){
			document.getElementById("cari").innerHTML=xmlhttp.responseText;
			}
	if(response=="isi"){
		document.getElementById("isi").innerHTML=xmlhttp.responseText;
		}
	if(response=="lihat"){
		document.getElementById("lihat").innerHTML=xmlhttp.responseText;
		}
	if(response=="aksi"){
		document.getElementById("aksi").innerHTML=xmlhttp.responseText;
		}
	if(response=="print"){
		document.getElementById("print").innerHTML=xmlhttp.responseText;
		}
	if(response=="foto"){
		document.getElementById("foto").innerHTML=xmlhttp.responseText;
		}
}


function ajax(url,post,response){
	xmlhttp=GetXmlHttpObject();
	xmlhttp.onreadystatechange=function(){
	if(xmlhttp.readyState==4){
		if(xmlhttp.status==200){
		out_response(response);
			}else{
				ajax_fail();
				}
	}
	}
	xmlhttp.open("POST",url,true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(post);
  }
function ajax_fail(){
	alert('maaf ada gangguan penerimaan data, silahkan coba lagi atau refresh web browser anda');
	return false;
	}
function GetXmlHttpObject(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
		}
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			alert('browser anda tidak mendukung ajax');}
			return false;
	}
