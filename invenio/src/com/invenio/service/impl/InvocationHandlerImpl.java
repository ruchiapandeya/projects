package com.invenio.service.impl;

import java.lang.reflect.InvocationHandler;
import java.lang.reflect.Method;
import java.util.HashMap;

import org.apache.log4j.Logger;

import com.invenio.service.Operation;
/**
 * 
 * @author girishbabu
 * <P>
 * This class handles the java reflection method for 
 * handling & executing the hibernate CRUD interface's 
 * invoked methods.
 */
public class InvocationHandlerImpl implements InvocationHandler {

	private static Logger logger = Logger.getLogger(InvocationHandlerImpl.class);
	private static HashMap<String,Object> methods = new HashMap<String,Object>();
	/**
	 * Puts all the CRUD methods in hash map.
	 */
	public InvocationHandlerImpl() {
		if (methods.isEmpty()) {
			methods.put("add",new AddOperation());
			methods.put("update",new UpdateOperation());
			methods.put("insertOrUpdate",new InsertOrUpdateOperation());
			methods.put("findByPrimaryKey",new FindByPKOperation());
			methods.put("delete",new DeleteOperation());
			methods.put("findAll", new FindAllOperation());
		}
	}
	
	/**
	 * This method will be invoked when in logic crud interface's method will be invoked.
	 * This method also gets the hibernate operation impl class to be executed.
	 */
    public Object invoke(Object proxy, Method method, Object[] args) throws Throwable {
        Operation operation = getOperation(method);
        if (operation == null) {
            throw new UnsupportedOperationException();
        }
        try {
        	Object object = operation.executeMethod(args, method, CurrentSession.getSession());
        	if(object instanceof Boolean) {
        		Boolean bool = (Boolean) object;
        		if(!bool.booleanValue()){
        			Exception opFailedEx = new Exception("Method failed in DB.");
        			logger.error("InvocationHandlerImpl:invoke() -- Exception ", opFailedEx);
        			throw opFailedEx;
        		}
        	}
            return object;
        } catch (Exception e) {
        	logger.error("InvocationHandlerImpl:invoke() -- Exception ",e);
            throw e;
        }
        
    }
    /**
	 * This method gets the hibernate operation for a call.
	 */
    private Operation getOperation(Method method) {
        Operation result = (Operation) methods.get(method.getName());
        if (result == null && method.getName().startsWith("find")) {
            result = (Operation) new FindCustomQueryOperation();
        }
        return result;
    }
}
