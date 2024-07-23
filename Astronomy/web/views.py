from django.shortcuts import render
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
import json

# Create your views here.

@csrf_exempt
def simple_post_view(request):
    if request.method == 'POST':
        try:
            data = json.loads(request.body)
            # Processing of received data
            return JsonResponse({'status': 'success', 'data': data}, status=200)
        except json.JSONDecodeError:
            return JsonResponse({'status': 'error', 'message': 'Invalid JSON'}, status=400)
    else:
        return JsonResponse({'status': 'error', 'message': 'Invalid request method'}, status=405)

def index(request):
    return render(request, 'index.html')

def next_page(request):
    return render(request, 'next_page.html')

def next_page_2(request):
    return render(request, 'next_page_2.html')

def imagea_page(request):
    return render(request, 'Imagea.html')