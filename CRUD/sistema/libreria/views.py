from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def inicio(request):
    return render(request, 'paginas/inicio.html')
    # return HttpResponse("Welcome Developer")
def nosotros(request):
    return render(request, 'paginas/nosotros.html')
def libro (request):
    return render(request, 'paginas/base.html')