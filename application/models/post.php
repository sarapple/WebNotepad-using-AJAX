<?php 	     
class Post extends CI_Model 
{
	function getpostdb(){
    	return $this->db->query("SELECT * FROM posts")->result_array();
 	}
 	function addpostdb($newpost){
 		$query = "INSERT INTO posts(description, created_at, updated_at) VALUES (?,NOW(),NOW())";
    	$this->db->query($query, $newpost);
    	return $this->db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 1")->row_array();
 	}
}
?>

* {
	margin: 0px;
	padding: 0px;
    font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
}
a {
    text-decoration: none;
    color: RGB(66, 139, 203);
}
body {
	width: 100%;
}
#container {
	margin: 0px auto;
	width: 100%;
	display: block;
}
.row {
	margin: 0px auto;
    display: block;
}
.col-2 {
	padding: 3%;
	margin: 0px auto;
	width: 43%;
	min-width:.01%;
	display: inline-block;
}
.col-wish {
    vertical-align: top;
    padding: 4%;
    margin: 0px auto;
    width: 12%;
    min-width:.01%;
    display: inline-block;
}
    .col-wish h3 {
        margin: 0px auto;
    }
    .col-wish img {
        margin: 10px auto;
        width: 80px;
        height: 80px;
        border: 1px solid #ddd;
    }
.col-checkout {
    vertical-align: top;
    padding-top: 4%;
    padding-right: 8%;
    padding-bottom: 8%;
    margin: 0px auto;
    width: 12%;
    min-width:.01%;
    display: inline-block;
}
    .col-wish h3 {
        margin: 0px auto;
    }
    .col-wish img {
        margin: 10px auto;
        width: 80px;
        height: 80px;
        border: 1px solid #ddd;
    }
.col-1 {
    padding: 4%;
    margin: 0px auto;
    width: 70%;
    min-width:.01%;
    display: inline-block;
}
	.text-right {
		text-align: right;
	}
table {
        border: 1px solid #ddd;
        width: 100%;
        max-width:100%;
        padding: 2%;
        margin: 1% auto;
        vertical-align: top;
        min-height: .01%;
        overflow-x: auto;
    }
        .total {
            outline: 1px solid #ddd;
        }
        table th{
            text-align: left;
            padding:1%;
        }
        table td{
            vertical-align: top;
            text-align: center;
            padding:1%;
        }
            .description {
                vertical-align: top;
                text-align: justify;
            }
            .buy{
                text-decoration: none;
                color: RGB(66, 139, 203);                
            }
            .wish {
                margin-top: 80px;
                color: red;
            }
            table img {
            	width: 200px;
            	height: 200px;
                border: 1px solid #ddd;
            }
    form.checkout {
        border: 1px solid #ddd;
        width: 100%;
        max-width:100%;
        padding: 20px;
        margin: 10px auto;
        vertical-align: top;
        border-top: 1px solid #ddd;
        min-height: .01%;
        overflow-x: auto;
    }
        .checkout label {
            display: block;
            padding-top:20px;
            padding-bottom:20px;
            padding-right: 25%;
        }
        .checkout {
            text-align: left;
        }