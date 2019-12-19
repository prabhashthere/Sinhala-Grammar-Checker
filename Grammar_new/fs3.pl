% -*- coding: utf-8 -*-

fstructure('ඔහු බත් නටද්දී බත් කමි',
	% Properties:
	[
	'markup_free_sentence'('ඔහු බත් නටද්දී බත් කමි'),
	'xle_version'('XLE release of Mar 17, 2017 21:12.'),
	'grammar'('/opt/lampp/htdocs/fyp-backend/Grammar/error.lfg'),
	'grammar_date'('Nov 27, 2019 19:02'),
	'word_count'('5'),
	'statistics'('16 solutions, 0.005 CPU seconds, 0.190MB max mem, 21 subtrees unified'),
	'rootcategory'('S'),
	'hostname'('piyumal-Vostro-3559')
	],
	% Choices:
	[
	
	],
	% Equivalences:
	[
	
	],
	% Constraints:
	[
	cf(1,eq(attr(var(0),'PRED'),semform('ක',4,[var(3),var(1)],[]))),
	cf(1,eq(attr(var(0),'SUBJ'),var(3))),
	cf(1,eq(attr(var(0),'OBJ'),var(1))),
	cf(1,eq(attr(var(0),'OBJ3'),var(2))),
	cf(1,eq(attr(var(0),'UNGRAMMATICAL'),var(4))),
	cf(1,eq(attr(var(0),'TENSE'),'nonpast')),
	cf(1,eq(attr(var(0),'VFORM'),'fin')),
	cf(1,eq(attr(var(3),'PRED'),semform('ඔහු',0,[],[]))),
	cf(1,eq(attr(var(3),'CASE'),'nom')),
	cf(1,eq(attr(var(3),'LIV'),'yes')),
	cf(1,eq(attr(var(3),'NUM'),'sg')),
	cf(1,eq(attr(var(3),'NUMB'),'sg')),
	cf(1,eq(attr(var(3),'PERS'),'3')),
	cf(1,eq(attr(var(1),'PRED'),semform('බත්',3,[],[]))),
	cf(1,eq(attr(var(1),'LIV'),'no')),
	cf(1,eq(attr(var(1),'PERS'),'3')),
	cf(1,eq(attr(var(2),'PRED'),semform('බත්',1,[],[]))),
	cf(1,eq(attr(var(2),'LIV'),'no')),
	cf(1,eq(attr(var(2),'PERS'),'3')),
	cf(1,in_set('Person_Mismatch',var(4))),
	cf(1,eq(attr(var(5),'PRED'),semform('නට',2,[],[]))),
	cf(1,eq(attr(var(5),'TENSE'),'nonpast')),
	cf(1,eq(attr(var(5),'VFORM'),'nonf'))
	],
	% C-Structure:
	[
	cf(1,subtree(33,'S',42,32)),
	cf(1,phi(33,var(0))),
	cf(1,subtree(42,'S',37,41)),
	cf(1,phi(42,var(0))),
	cf(1,subtree(41,'OP',-,27)),
	cf(1,phi(41,var(0))),
	cf(1,subtree(37,'S',36,24)),
	cf(1,phi(37,var(0))),
	cf(1,subtree(36,'S',16,20)),
	cf(1,phi(36,var(0))),
	cf(1,subtree(32,'VP',-,10)),
	cf(1,phi(32,var(0))),
	cf(1,subtree(27,'NP',-,8)),
	cf(1,phi(27,var(1))),
	cf(1,subtree(24,'NVP',-,6)),
	cf(1,phi(24,var(0))),
	cf(1,subtree(20,'NP',-,4)),
	cf(1,phi(20,var(2))),
	cf(1,subtree(16,'S',-,14)),
	cf(1,phi(16,var(0))),
	cf(1,subtree(14,'NP',-,2)),
	cf(1,phi(14,var(3))),
	cf(1,subtree(10,'V',-,9)),
	cf(1,phi(10,var(0))),
	cf(1,terminal(9,'කමි',[9])),
	cf(1,phi(9,var(0))),
	cf(1,subtree(8,'N',-,7)),
	cf(1,phi(8,var(1))),
	cf(1,terminal(7,'බත්',[7])),
	cf(1,phi(7,var(1))),
	cf(1,subtree(6,'V',-,5)),
	cf(1,phi(6,var(5))),
	cf(1,terminal(5,'නටද්දී',[5])),
	cf(1,phi(5,var(5))),
	cf(1,subtree(4,'N',-,3)),
	cf(1,phi(4,var(2))),
	cf(1,terminal(3,'බත්',[3])),
	cf(1,phi(3,var(2))),
	cf(1,subtree(2,'N',-,1)),
	cf(1,phi(2,var(3))),
	cf(1,terminal(1,'ඔහු',[1])),
	cf(1,phi(1,var(3))),
	cf(1,semform_data(0,2,1,1)),
	cf(1,semform_data(1,4,11,11)),
	cf(1,semform_data(2,6,21,21)),
	cf(1,semform_data(3,8,40,40)),
	cf(1,semform_data(4,10,50,50)),
	cf(1,fspan(var(3),1,10)),
	cf(1,fspan(var(2),11,20)),
	cf(1,fspan(var(5),21,39)),
	cf(1,fspan(var(1),40,49)),
	cf(1,fspan(var(0),1,59)),
	cf(1,surfaceform(1,'ඔහු',1,10)),
	cf(1,surfaceform(3,'බත්',11,20)),
	cf(1,surfaceform(5,'නටද්දී',21,39)),
	cf(1,surfaceform(7,'බත්',40,49)),
	cf(1,surfaceform(9,'කමි',50,59))
	]).