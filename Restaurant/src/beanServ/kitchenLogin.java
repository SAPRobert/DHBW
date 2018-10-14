package beanServ;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Servlet01
 */
@WebServlet("/kitchenLogin")
public class kitchenLogin extends HttpServlet {
	private static final long serialVersionUID = 1L;

    /**
     * Default constructor. 
     */
    public kitchenLogin() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doPost(request, response);
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		String passwort = request.getParameter("Passwort");
		response.setContentType("text/html");
		PrintWriter out = response.getWriter();
		RequestDispatcher rd = null;
		if(passwort == null) {
			passwort="hirsch";
		};
		request.setAttribute(passwort, "hirsch"); 
		if(passwort.equals("hirsch")) { //Prüfung Passwort = hirsch
			rd = request.getRequestDispatcher("/index.jsp"); //Weiterleitung zu index.jsp wenn korrekt
			rd.forward(request, response);
		}
		else {
			out.println("<label id=falsch>Falsches Passwort!</label>"); //Ausgabe falsches Passwort
			rd = request.getRequestDispatcher("/kitchenLog.jsp"); //Reload kitchenLog.jsp
			rd.include(request, response);
		}
		out.close();
	}	
}
