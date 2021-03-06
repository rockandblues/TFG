#-*- coding=utf-8 -*-

import time
from datetime import datetime

class ParseoFechaClass():
	def parseo(self,fecha): 
		trozos = fecha.split()

		dia = trozos[1] # dia
		mes = trozos[3] # mes en letra
		temp = len(trozos[5])
		ano = trozos[5][:temp - 1] # año completo
		temp = len(trozos[6])
		hora = trozos[6][:temp - 1] # HH:MM

		#pasar meses de letra a numero
		meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]

		if(trozos[3] in meses):
		    #mes = trozos[3].index()
		    mes = meses.index(trozos[3]) + 1

		fecha = ano + "-" + str(mes) + "-" + dia + " " + hora + ":00" 

		return fecha
