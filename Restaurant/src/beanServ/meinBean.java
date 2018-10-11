package beanServ;

import java.util.*;

public class meinBean{
	
	public static String meineFunktion() {

		Calendar calendar = new GregorianCalendar();
		int hour = calendar.get(Calendar.HOUR);
		int minute = calendar.get(Calendar.MINUTE);
		int second = calendar.get(Calendar.SECOND);
		
		if(calendar.get(Calendar.AM_PM) == 0) {
			hour = hour;
		} 
		else {
			hour = hour + 12;
		}
		  String CT = hour +":"+ minute +":"+ second + " Uhr"/*+ am_pm*/;
		  return CT;
		  
	}

}
