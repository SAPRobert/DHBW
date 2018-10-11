package beanServ;

import java.util.*;

public class meinBean{
	
	public static void meineFunktion() {

		Calendar calendar = new GregorianCalendar();
		String am_pm;
		  
		int hour = calendar.get(Calendar.HOUR);
		int minute = calendar.get(Calendar.MINUTE);
		int second = calendar.get(Calendar.SECOND);
		
		if(calendar.get(Calendar.AM_PM) == 0)
		  am_pm = "AM";
		else
		  am_pm = "PM";
		  hour = hour + 12;
		  String CT = hour+":"+ minute +":"+ second /*+ am_pm*/;
	}

}
