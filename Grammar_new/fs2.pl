% -*- coding: utf-8 -*-

fstructure('මම නටද්දී ගෙදර යමි',
	% Properties:
	[
	'markup_free_sentence'('මම නටද්දී ගෙදර යමි'),
	'xle_version'('XLE release of Mar 17, 2017 21:12.'),
	'grammar'('/opt/lampp/htdocs/fyp-backend/Grammar/error_case.lfg'),
	'grammar_date'('Nov 26, 2019 11:59'),
	'word_count'('4'),
	'statistics'('0 solutions, 0.003 CPU seconds, 0.150MB max mem, 19 subtrees unified'),
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
	cf(1,eq(attr(var(0),'PRED'),semform('ය',3,[var(2),var(1)],[]))),
	cf(1,eq(attr(var(0),'SUBJ'),var(2))),
	cf(1,eq(attr(var(0),'OBJ'),var(1))),
	cf(1,eq(attr(var(0),'UNGRAMMATICAL'),var(5))),
	cf(1,eq(attr(var(0),'TENSE'),'nonpast')),
	cf(1,eq(attr(var(0),'VFORM'),'fin')),
	cf(1,eq(attr(var(2),'PRED'),semform('ගෙදර',2,[],[]))),
	cf(1,eq(attr(var(2),'ADJUNCT'),var(3))),
	cf(1,eq(attr(var(2),'CASE'),'nom')),
	cf(1,eq(attr(var(2),'LIV'),'no')),
	cf(1,eq(attr(var(2),'NUM'),'sg')),
	cf(1,eq(attr(var(2),'PERS'),'3')),
	cf(1,in_set(var(4),var(3))),
	cf(1,eq(attr(var(4),'PRED'),semform('මම',0,[],[]))),
	cf(1,eq(attr(var(4),'CASE'),'nom')),
	cf(1,eq(attr(var(4),'LIV'),'yes')),
	cf(1,eq(attr(var(4),'NUMB'),'sg')),
	cf(1,eq(attr(var(4),'PERS'),'1')),
	cf(1,in_set('Person_Mismatch',var(5))),
	cf(1,eq(attr(var(6),'PRED'),semform('නට',1,[],[]))),
	cf(1,eq(attr(var(6),'TENSE'),'nonpast')),
	cf(1,eq(attr(var(6),'VFORM'),'nonf'))
	],
	% C-Structure:
	[
	cf(1,subtree(41,'S',47,40)),
	cf(1,phi(41,var(0))),
	cf(1,subtree(47,'S',-,45)),
	cf(1,phi(47,var(0))),
	cf(1,subtree(45,'NP',44,6)),
	cf(1,phi(45,var(2))),
	cf(1,subtree(44,'NP',-,42)),
	cf(1,phi(44,var(2))),
	cf(1,subtree(42,'AP',12,4)),
	cf(1,phi(42,var(4))),
	cf(1,subtree(40,'VP',-,8)),
	cf(1,phi(40,var(0))),
	cf(1,subtree(12,'AP',-,2)),
	cf(1,phi(12,var(4))),
	cf(1,subtree(8,'V',-,7)),
	cf(1,phi(8,var(0))),
	cf(1,terminal(7,'යමි',[7])),
	cf(1,phi(7,var(0))),
	cf(1,subtree(6,'N',-,5)),
	cf(1,phi(6,var(2))),
	cf(1,terminal(5,'ගෙදර',[5])),
	cf(1,phi(5,var(2))),
	cf(1,subtree(4,'V',-,3)),
	cf(1,phi(4,var(6))),
	cf(1,terminal(3,'නටද්දී',[3])),
	cf(1,phi(3,var(6))),
	cf(1,subtree(2,'N',-,1)),
	cf(1,phi(2,var(4))),
	cf(1,terminal(1,'මම',[1])),
	cf(1,phi(1,var(4))),
	cf(1,semform_data(0,2,1,1)),
	cf(1,semform_data(1,4,8,8)),
	cf(1,semform_data(2,6,27,27)),
	cf(1,semform_data(3,8,40,40)),
	cf(1,fspan(var(6),8,26)),
	cf(1,fspan(var(4),1,26)),
	cf(1,fspan(var(2),1,39)),
	cf(1,fspan(var(0),1,49)),
	cf(1,surfaceform(1,'මම',1,7)),
	cf(1,surfaceform(3,'නටද්දී',8,26)),
	cf(1,surfaceform(5,'ගෙදර',27,39)),
	cf(1,surfaceform(7,'යමි',40,49))
	]).
