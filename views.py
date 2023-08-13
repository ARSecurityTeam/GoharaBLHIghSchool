from django.shortcuts import render

def registration_view(request):
    if request.method == 'POST':
        # Process form data here
        name = request.POST.get('name')
        dob = request.POST.get('dob')
        address = request.POST.get('address')
        parent_name = request.POST.get('parent_name')
        parent_number = request.POST.get('parent_number')
        
        # You can perform further processing or database insertion here
        
        # For now, let's render a simple response page
        return render(request, 'registration_success.html')
    
    return render(request, 'registration_form.html')
