 <script>
        function netwt(){
        var gross = parseFloat(document.getElementById("gold_gross_wt").value);
        var ston = parseFloat(document.getElementById("gold_ston_wt").value);
        var net = parseFloat(gross - ston);
        document.getElementById("gold_net_wt").value = net;                       
        }                        
        </script>
<script>

function scheme(){

var loan_scheme = document.getElementById("loan_scheme").value;        
    // let loandays = "0 - 30";        
if(loan_scheme=="BUL"){   
    alert("BUL Plan");
    // let minamount = parseInt(document.getElementById("scheme_minamount").value);
    // let maxamount = parseInt(document.getElementById("scheme_maxamount").value);
    let loanintrest = parseInt(document.getElementById("scheme_days").value);   
    // document.getElementById('scheme_minamount').innerHTML=minamount;
    // document.getElementById('maxamount').innerHTML=maxamount;
    // document.getElementById('loandays').innerHTML=loandays;
    // document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
    let calculate = document.getElementById("calculate");
    calculate.addEventListener("click", function() {
    let loan_amount = parseInt(document.getElementById("loan_amount").value);
    let totalloan = loan_amount + (loan_amount*loanintrest/100);
    let loan_penalty = totalloan * 18 / 100;
    let netwt= parseFloat(document.getElementById("gold_net_wt").value);
    let goldrate= parseFloat(document.getElementById("gold_rate").value);
    let totalrequision = parseFloat(netwt * goldrate);     
    document.getElementById("eligiblerequisition").innerHTML = totalrequision;   
    document.getElementById("totalpayamount").innerHTML = totalloan;
    document.getElementById("monthlyamount").innerHTML = totalloan / 6;
    document.getElementById("penaltyamount").innerHTML = loan_penalty;  
    });
    
}else if(loan_scheme=="BPL"){
    alert("BPL Plan");
    // let minamount = parseInt(document.getElementById("scheme_minamount").value);
    // let maxamount = parseInt(document.getElementById("scheme_maxamount").value);
    let loanintrest = parseInt(document.getElementById("scheme_days").value); 
    // document.getElementById('minamount').innerHTML=minamount;
    // document.getElementById('maxamount').innerHTML=maxamount;
    // document.getElementById('loandays').innerHTML=loandays;
    // document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
    let add = document.getElementById("calculate");
    add.addEventListener("click", function() {
    let loan_amount = parseInt(document.getElementById("loan_amount").value);
    let totalloan = loan_amount + (loan_amount*loanintrest/100);
    let loan_penalty = totalloan * 18 / 100;
    let netwt= parseFloat(document.getElementById("gold_net_wt").value);
    let goldrate= parseFloat(document.getElementById("gold_rate").value);
    let totalrequision = parseFloat(netwt * goldrate);     
    document.getElementById("eligiblerequisition").innerHTML = totalrequision;
    document.getElementById("totalpayamount").innerHTML = totalloan;
    document.getElementById("monthlyamount").innerHTML = totalloan / 6;
    document.getElementById("penaltyamount").innerHTML = loan_penalty;  
    });          
}else if(loan_scheme=="BAL"){
    alert("BAL Plan");
    // let minamount = parseInt(document.getElementById("scheme_minamount").value);
    // let maxamount = parseInt(document.getElementById("scheme_maxamount").value);
    let loanintrest = parseInt(document.getElementById("scheme_days").value);
    // document.getElementById('minamount').innerHTML=minamount;
    // document.getElementById('maxamount').innerHTML=maxamount;
    // document.getElementById('loandays').innerHTML=loandays;
    // document.getElementById('applicableintrest').innerHTML=loanintrest+'%';
    let add = document.getElementById("calculate");
    add.addEventListener("click", function() {
    let loan_amount = parseInt(document.getElementById("loan_amount").value);
    let totalloan = loan_amount + (loan_amount*loanintrest/100);
    let loan_penalty = totalloan * 18 / 100;
    let netwt= parseFloat(document.getElementById("gold_net_wt").value);
    let goldrate= parseFloat(document.getElementById("gold_rate").value);
    let totalrequision = parseFloat(netwt * goldrate);     
    document.getElementById("eligiblerequisition").innerHTML = totalrequision;
    document.getElementById("totalpayamount").innerHTML = totalloan;
    document.getElementById("monthlyamount").innerHTML = totalloan / 6;
    document.getElementById("penaltyamount").innerHTML = loan_penalty;  
    });        
}else{
    alert(loan_scheme);  
}
// // Print Details
//     let add = document.getElementById("calculate");
//     add.addEventListener("click", function() {
//     let minamount = parseInt(document.getElementById("loan_scheme").value);    
//     let loan_amount = parseInt(document.getElementById("loan_amount").value);
//     let totalloan = loan_amount + minamount;
//     let loan_penalty = totalloan * 6 / 100;
//     document.getElementById("totalpayamount").innerHTML = (loan_amount + minamount);
//     document.getElementById("monthlyamount").innerHTML = loan_amount / minamount;
//     document.getElementById("penaltyamount").innerHTML = loan_penalty;
//     });  
}
</script>
