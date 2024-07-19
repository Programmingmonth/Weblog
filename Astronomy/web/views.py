from django.shortcuts import render

# Create your views here.

def index(request):
    return render(request, 'index.html')

def next_page(request):
    return render(request, 'next_page.html')

def next_page_2(request):
    return render(request, 'next_page_2.html')