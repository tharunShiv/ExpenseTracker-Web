function myFunction() {
    
    
    event.preventDefault;
    alert('Form submitted successfully');
    e = document.getElementById('expense').value;
    alert('Expense is '+e);
    i = document.getElementById('income').value;
    alert('Income is'+i);
    if(e>i){
        alert('Expense is too much, Take care of it Bruh!');
    }
    else{
        alert('Way to go Bruh!');
        
        
    }
    
    document.getElementById('result').innerText="Form Submitted Successfully";
    
}