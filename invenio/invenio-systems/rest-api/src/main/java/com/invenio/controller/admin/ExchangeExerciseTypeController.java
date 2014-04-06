package com.invenio.controller.admin;


import javax.ws.rs.Path;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.invenio.controller.AbstractController;
import com.invenio.schema.beans.admin.ExchangeExerciseType;
import com.invenio.service.admin.ExchangeExerciseTypeService;

@Path("/exchange-exercise-type")
@Service
public class ExchangeExerciseTypeController extends
		AbstractController<ExchangeExerciseType, com.invenio.dao.entity.admin.ExchangeExerciseType, Integer, ExchangeExerciseTypeService> {

	@Autowired
	public ExchangeExerciseTypeController(ExchangeExerciseTypeService service) {
		super("exchange-exercise-type", service);
	}
}
