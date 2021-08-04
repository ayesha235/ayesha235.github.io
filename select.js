$(document).ready(function(){
    $("#splace").on("change", function(){
        var val = $("#splace").val();
        
        if(val == "SIALKOT JN"){
            $('#dplace').append('<option val="KARACHI CANTT">KARACHI CANTT</option>');
        }
        else if(val == "KARACHI CANTT"){
            $('#dplace').append('<option val="SIALKOT JN">SIALKOT JN</option>');
            $('#dplace').append('<option val="LAHORE JN">LAHORE JN</option>');
        }
        else if(val == "LAHORE JN"){
            $('#dplace').append('<option val="FAISALABAD">FAISALABAD</option>');
			$('#dplace').append('<option val="RAWALPINDI">RAWALPINDI</option>');
			$('#dplace').append('<option val="KARACHI CANTT">KARACHI CANTT</option>');
          
        }
		 else if(val == "FAISALABAD"){
            $('#dplace').append('<option val="LAHORE JN">LAHORE JN</option>');
          
        }
		else if(val == "MULTAN CANTT"){
            $('#dplace').append('<option val="KARACHI CITY">KARACHI CITY</option>');
          
        }
		else if(val == "KARACHI CITY"){
            $('#dplace').append('<option val="MULTAN CANTT">MULTAN CANTT</option>');
            $('#dplace').append('<option val="MIRPUR KHAS JN">MIRPUR KHAS JN</option>');
          
        }
		else if(val == "RAWALPINDI"){
            $('#dplace').append('<option val="LAHORE JN">LAHORE JN</option>');
          
        }
		else if(val == "PESHAWAR CANTT"){
            $('#dplace').append('<option val="QUETTA">QUETTA</option>');
          
        }
		else if(val == "QUETTA"){
            $('#dplace').append('<option val="PESHAWAR CANTT">PESHAWAR CANTT</option>');
          
        }
		else if(val == "MIRPUR KHAS JN"){
            $('#dplace').append('<option val="KARACHI CITY">KARACHI CITY</option>');
          
        }
    
    });
});