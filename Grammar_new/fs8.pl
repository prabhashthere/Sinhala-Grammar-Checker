% -*- coding: utf-8 -*-

fstructure('මම බත් කමු',
	% Properties:
	[
	'markup_free_sentence'('මම බත් කමු'),
	'xle_version'('XLE release of Mar 17, 2017 21:12.'),
	'grammar'('/opt/lampp/htdocs/fyp-backend/Grammar_new/error.lfg'),
	'grammar_date'('Dec 06, 2019 14:53'),
	'word_count'('3'),
	'statistics'('10 solutions, 0.006 CPU seconds, 0.144MB max mem, 11 subtrees unified'),
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
	cf(1,eq(attr(var(0),'PRED'),semform('ක',2,[var(2),var(1)],[]))),
	cf(1,eq(attr(var(0),'SUBJ'),var(2))),
	cf(1,eq(attr(var(0),'OBJ'),var(1))),
	cf(1,eq(attr(var(0),'UNGRAMMATICAL'),var(3))),
	cf(1,eq(attr(var(0),'TENSE'),'nonpast')),
	cf(1,eq(attr(var(0),'VFORM'),'fin')),
	cf(1,eq(attr(var(2),'PRED'),semform('මම',0,[],[]))),
	cf(1,eq(attr(var(2),'CASE'),'nom')),
	cf(1,eq(attr(var(2),'LIV'),'yes')),
	cf(1,eq(attr(var(2),'NUMB'),'sg')),
	cf(1,eq(attr(var(2),'PERS'),'1')),
	cf(1,eq(attr(var(1),'PRED'),semform('බත්',1,[],[]))),
	cf(1,eq(attr(var(1),'CASE'),'acc')),
	cf(1,eq(attr(var(1),'LIV'),'no')),
	cf(1,eq(attr(var(1),'PERS'),'3')),
	cf(1,in_set('Number_Mismatch',var(3)))
	],
	% C-Structure:
	[
	cf(1,subtree(43,'S',40,42)),
	cf(1,phi(43,var(0))),
	cf(1,subtree(42,'VP',-,6)),
	cf(1,phi(42,var(0))),
	cf(1,subtree(40,'S',13,37)),
	cf(1,phi(40,var(0))),
	cf(1,subtree(37,'OP',-,18)),
	cf(1,phi(37,var(0))),
	cf(1,subtree(18,'NP',-,4)),
	cf(1,phi(18,var(1))),
	cf(1,subtree(13,'S',-,12)),
	cf(1,phi(13,var(0))),
	cf(1,subtree(12,'NP',-,2)),
	cf(1,phi(12,var(2))),
	cf(1,subtree(6,'V',-,5)),
	cf(1,phi(6,var(0))),
	cf(1,terminal(5,'කමු',[5])),
	cf(1,phi(5,var(0))),
	cf(1,subtree(4,'N',-,3)),
	cf(1,phi(4,var(1))),
	cf(1,terminal(3,'බත්',[3])),
	cf(1,phi(3,var(1))),
	cf(1,subtree(2,'N',-,1)),
	cf(1,phi(2,var(2))),
	cf(1,terminal(1,'මම',[1])),
	cf(1,phi(1,var(2))),
	cf(1,semform_data(0,2,1,1)),
	cf(1,semform_data(1,4,8,8)),
	cf(1,semform_data(2,6,18,18)),
	cf(1,fspan(var(2),1,7)),
	cf(1,fspan(var(1),8,17)),
	cf(1,fspan(var(0),1,27)),
	cf(1,surfaceform(1,'මම',1,7)),
	cf(1,surfaceform(3,'බත්',8,17)),
	cf(1,surfaceform(5,'කමු',18,27))
	]).
