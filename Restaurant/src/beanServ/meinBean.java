package beanServ;

import java.util.*;

public class meinBean{
	
	public static String meineFunktion() {
		
		Calendar calendar = new GregorianCalendar(); //erzeugt Calender-Objekt
		int hour = calendar.get(Calendar.HOUR);      //definiert Stunden
		int minute = calendar.get(Calendar.MINUTE);  //definiert Minuten
		int second = calendar.get(Calendar.SECOND);  //definiert Sekunden
		
		if(calendar.get(Calendar.AM_PM) == 0) {
			hour = hour;
		} 
		else {
			hour = hour + 12; //+12 wenn nach 12 Uhr, also pm Zeit
		}
		  String Time = hour +":"+ minute +":"+ second + " Uhr"; //Definition Uhrzeit-String
		  return Time;
		  
	}

}
