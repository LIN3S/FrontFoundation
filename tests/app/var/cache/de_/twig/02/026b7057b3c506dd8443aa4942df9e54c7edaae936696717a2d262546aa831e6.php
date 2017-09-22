<?php

/* node_modules/escope/powered-test/object-expression.js */
class __TwigTemplate_0278dadb95d777e6f330484848a5be4cec342c5b465f66946ce600e1e3677647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e5e2edc87fba9ec6f0a66d96d2b22cae601445ce66f44464d75382542ddc410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5e2edc87fba9ec6f0a66d96d2b22cae601445ce66f44464d75382542ddc410->enter($__internal_2e5e2edc87fba9ec6f0a66d96d2b22cae601445ce66f44464d75382542ddc410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escope/powered-test/object-expression.js"));

        // line 1
        echo "(function() {
  'use strict';
  var escope, expect;

  expect = require('chai').expect;

  escope = require('..');

  describe('object expression', function() {
    return it('doesn\\'t require property type', function() {
      var ast, scope;
      ast = {
        type: 'Program',
        body: [
          {
            type: 'VariableDeclaration',
            declarations: [
              {
                type: 'VariableDeclarator',
                id: {
                  type: 'Identifier',
                  name: 'a'
                },
                init: {
                  type: 'ObjectExpression',
                  properties: [
                    {
                      kind: 'init',
                      key: {
                        type: 'Identifier',
                        name: 'foo'
                      },
                      value: {
                        type: 'Identifier',
                        name: 'a'
                      }
                    }
                  ]
                }
              }
            ]
          }
        ]
      };
      scope = escope.analyze(ast).scopes[0];
      expect(scope.variables).to.have.length(1);
      expect(scope.references).to.have.length(2);
      expect(scope.variables[0].name).to.be.equal('a');
      expect(scope.references[0].identifier.name).to.be.equal('a');
      return expect(scope.references[1].identifier.name).to.be.equal('a');
    });
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm9iamVjdC1leHByZXNzaW9uLmNvZmZlZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQztBQUFBLEVBQUEsWUFBQSxDQUFBO0FBQUEsTUFBQSxjQUFBOztBQUFBLEVBRUQsTUFBQSxHQUFTLE9BQUEsQ0FBUyxNQUFULENBQWUsQ0FBQyxNQUZ4QixDQUFBOztBQUFBLEVBR0QsTUFBQSxHQUFTLE9BQUEsQ0FBUyxJQUFULENBSFIsQ0FBQTs7QUFBQSxFQUtELFFBQUEsQ0FBVSxtQkFBVixFQUE4QixTQUFBLEdBQUE7V0FDMUIsRUFBQSxDQUFJLGdDQUFKLEVBQXFDLFNBQUEsR0FBQTtBQUlqQyxVQUFBLFVBQUE7QUFBQSxNQUFBLEdBQUEsR0FDSTtBQUFBLFFBQUEsSUFBQSxFQUFPLFNBQVA7QUFBQSxRQUNBLElBQUEsRUFBTTtVQUFDO0FBQUEsWUFDSCxJQUFBLEVBQU8scUJBREo7QUFBQSxZQUVILFlBQUEsRUFBYztjQUFDO0FBQUEsZ0JBQ1gsSUFBQSxFQUFPLG9CQURJO0FBQUEsZ0JBRVgsRUFBQSxFQUNJO0FBQUEsa0JBQUEsSUFBQSxFQUFPLFlBQVA7QUFBQSxrQkFDQSxJQUFBLEVBQU8sR0FEUDtpQkFITztBQUFBLGdCQUtYLElBQUEsRUFDSTtBQUFBLGtCQUFBLElBQUEsRUFBTyxrQkFBUDtBQUFBLGtCQUNBLFVBQUEsRUFBWTtvQkFBQztBQUFBLHNCQUNULElBQUEsRUFBTyxNQURFO0FBQUEsc0JBRVQsR0FBQSxFQUNJO0FBQUEsd0JBQUEsSUFBQSxFQUFPLFlBQVA7QUFBQSx3QkFDQSxJQUFBLEVBQU8sS0FEUDt1QkFISztBQUFBLHNCQUtULEtBQUEsRUFDSTtBQUFBLHdCQUFBLElBQUEsRUFBTyxZQUFQO0FBQUEsd0JBQ0EsSUFBQSxFQUFPLEdBRFA7dUJBTks7cUJBQUQ7bUJBRFo7aUJBTk87ZUFBRDthQUZYO1dBQUQ7U0FETjtPQURKLENBQUE7QUFBQSxNQXVCQSxLQUFBLEdBQVEsTUFBTSxDQUFDLE9BQVAsQ0FBZSxHQUFmLENBQW1CLENBQUMsTUFBTyxDQUFBLENBQUEsQ0F2Qm5DLENBQUE7QUFBQSxNQXdCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQWIsQ0FBdUIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWhDLENBQXVDLENBQXZDLENBeEJBLENBQUE7QUFBQSxNQXlCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQWIsQ0FBd0IsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWpDLENBQXdDLENBQXhDLENBekJBLENBQUE7QUFBQSxNQTBCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQVUsQ0FBQSxDQUFBLENBQUUsQ0FBQyxJQUExQixDQUErQixDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBdEMsQ0FBNkMsR0FBN0MsQ0ExQkEsQ0FBQTtBQUFBLE1BMkJBLE1BQUEsQ0FBTyxLQUFLLENBQUMsVUFBVyxDQUFBLENBQUEsQ0FBRSxDQUFDLFVBQVUsQ0FBQyxJQUF0QyxDQUEyQyxDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBbEQsQ0FBeUQsR0FBekQsQ0EzQkEsQ0FBQTthQTRCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQVcsQ0FBQSxDQUFBLENBQUUsQ0FBQyxVQUFVLENBQUMsSUFBdEMsQ0FBMkMsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLEtBQWxELENBQXlELEdBQXpELEVBaENpQztJQUFBLENBQXJDLEVBRDBCO0VBQUEsQ0FBOUIsQ0FMQyxDQUFBO0FBQUEiLCJmaWxlIjoib2JqZWN0LWV4cHJlc3Npb24uanMiLCJzb3VyY2VSb290IjoiL3NvdXJjZS8iLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCdcblxuZXhwZWN0ID0gcmVxdWlyZSgnY2hhaScpLmV4cGVjdFxuZXNjb3BlID0gcmVxdWlyZSAnLi4nXG5cbmRlc2NyaWJlICdvYmplY3QgZXhwcmVzc2lvbicsIC0+XG4gICAgaXQgJ2RvZXNuXFwndCByZXF1aXJlIHByb3BlcnR5IHR5cGUnLCAtPlxuICAgICAgICAjIEhhcmRjb2RlZCBBU1QuICBFc3ByaW1hIGFkZHMgYW4gZXh0cmEgJ1Byb3BlcnR5J1xuICAgICAgICAjIGtleS92YWx1ZSB0byBPYmplY3RFeHByZXNzaW9ucywgc28gd2UncmUgbm90IHVzaW5nXG4gICAgICAgICMgaXQgcGFyc2UgYSBwcm9ncmFtIHN0cmluZy5cbiAgICAgICAgYXN0ID1cbiAgICAgICAgICAgIHR5cGU6ICdQcm9ncmFtJ1xuICAgICAgICAgICAgYm9keTogW3tcbiAgICAgICAgICAgICAgICB0eXBlOiAnVmFyaWFibGVEZWNsYXJhdGlvbidcbiAgICAgICAgICAgICAgICBkZWNsYXJhdGlvbnM6IFt7XG4gICAgICAgICAgICAgICAgICAgIHR5cGU6ICdWYXJpYWJsZURlY2xhcmF0b3InXG4gICAgICAgICAgICAgICAgICAgIGlkOlxuICAgICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ0lkZW50aWZpZXInXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiAnYSdcbiAgICAgICAgICAgICAgICAgICAgaW5pdDpcbiAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdPYmplY3RFeHByZXNzaW9uJ1xuICAgICAgICAgICAgICAgICAgICAgICAgcHJvcGVydGllczogW3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBraW5kOiAnaW5pdCdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBrZXk6XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdJZGVudGlmaWVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiAnZm9vJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlOlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlOiAnSWRlbnRpZmllcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZTogJ2EnXG4gICAgICAgICAgICAgICAgICAgICAgICB9XVxuICAgICAgICAgICAgICAgIH1dXG4gICAgICAgICAgICB9XVxuXG4gICAgICAgIHNjb3BlID0gZXNjb3BlLmFuYWx5emUoYXN0KS5zY29wZXNbMF1cbiAgICAgICAgZXhwZWN0KHNjb3BlLnZhcmlhYmxlcykudG8uaGF2ZS5sZW5ndGgoMSlcbiAgICAgICAgZXhwZWN0KHNjb3BlLnJlZmVyZW5jZXMpLnRvLmhhdmUubGVuZ3RoKDIpXG4gICAgICAgIGV4cGVjdChzY29wZS52YXJpYWJsZXNbMF0ubmFtZSkudG8uYmUuZXF1YWwoJ2EnKVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlc1swXS5pZGVudGlmaWVyLm5hbWUpLnRvLmJlLmVxdWFsKCdhJylcbiAgICAgICAgZXhwZWN0KHNjb3BlLnJlZmVyZW5jZXNbMV0uaWRlbnRpZmllci5uYW1lKS50by5iZS5lcXVhbCgnYScpXG4iXX0=";
        
        $__internal_2e5e2edc87fba9ec6f0a66d96d2b22cae601445ce66f44464d75382542ddc410->leave($__internal_2e5e2edc87fba9ec6f0a66d96d2b22cae601445ce66f44464d75382542ddc410_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escope/powered-test/object-expression.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("(function() {
  'use strict';
  var escope, expect;

  expect = require('chai').expect;

  escope = require('..');

  describe('object expression', function() {
    return it('doesn\\'t require property type', function() {
      var ast, scope;
      ast = {
        type: 'Program',
        body: [
          {
            type: 'VariableDeclaration',
            declarations: [
              {
                type: 'VariableDeclarator',
                id: {
                  type: 'Identifier',
                  name: 'a'
                },
                init: {
                  type: 'ObjectExpression',
                  properties: [
                    {
                      kind: 'init',
                      key: {
                        type: 'Identifier',
                        name: 'foo'
                      },
                      value: {
                        type: 'Identifier',
                        name: 'a'
                      }
                    }
                  ]
                }
              }
            ]
          }
        ]
      };
      scope = escope.analyze(ast).scopes[0];
      expect(scope.variables).to.have.length(1);
      expect(scope.references).to.have.length(2);
      expect(scope.variables[0].name).to.be.equal('a');
      expect(scope.references[0].identifier.name).to.be.equal('a');
      return expect(scope.references[1].identifier.name).to.be.equal('a');
    });
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm9iamVjdC1leHByZXNzaW9uLmNvZmZlZSJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQztBQUFBLEVBQUEsWUFBQSxDQUFBO0FBQUEsTUFBQSxjQUFBOztBQUFBLEVBRUQsTUFBQSxHQUFTLE9BQUEsQ0FBUyxNQUFULENBQWUsQ0FBQyxNQUZ4QixDQUFBOztBQUFBLEVBR0QsTUFBQSxHQUFTLE9BQUEsQ0FBUyxJQUFULENBSFIsQ0FBQTs7QUFBQSxFQUtELFFBQUEsQ0FBVSxtQkFBVixFQUE4QixTQUFBLEdBQUE7V0FDMUIsRUFBQSxDQUFJLGdDQUFKLEVBQXFDLFNBQUEsR0FBQTtBQUlqQyxVQUFBLFVBQUE7QUFBQSxNQUFBLEdBQUEsR0FDSTtBQUFBLFFBQUEsSUFBQSxFQUFPLFNBQVA7QUFBQSxRQUNBLElBQUEsRUFBTTtVQUFDO0FBQUEsWUFDSCxJQUFBLEVBQU8scUJBREo7QUFBQSxZQUVILFlBQUEsRUFBYztjQUFDO0FBQUEsZ0JBQ1gsSUFBQSxFQUFPLG9CQURJO0FBQUEsZ0JBRVgsRUFBQSxFQUNJO0FBQUEsa0JBQUEsSUFBQSxFQUFPLFlBQVA7QUFBQSxrQkFDQSxJQUFBLEVBQU8sR0FEUDtpQkFITztBQUFBLGdCQUtYLElBQUEsRUFDSTtBQUFBLGtCQUFBLElBQUEsRUFBTyxrQkFBUDtBQUFBLGtCQUNBLFVBQUEsRUFBWTtvQkFBQztBQUFBLHNCQUNULElBQUEsRUFBTyxNQURFO0FBQUEsc0JBRVQsR0FBQSxFQUNJO0FBQUEsd0JBQUEsSUFBQSxFQUFPLFlBQVA7QUFBQSx3QkFDQSxJQUFBLEVBQU8sS0FEUDt1QkFISztBQUFBLHNCQUtULEtBQUEsRUFDSTtBQUFBLHdCQUFBLElBQUEsRUFBTyxZQUFQO0FBQUEsd0JBQ0EsSUFBQSxFQUFPLEdBRFA7dUJBTks7cUJBQUQ7bUJBRFo7aUJBTk87ZUFBRDthQUZYO1dBQUQ7U0FETjtPQURKLENBQUE7QUFBQSxNQXVCQSxLQUFBLEdBQVEsTUFBTSxDQUFDLE9BQVAsQ0FBZSxHQUFmLENBQW1CLENBQUMsTUFBTyxDQUFBLENBQUEsQ0F2Qm5DLENBQUE7QUFBQSxNQXdCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQWIsQ0FBdUIsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWhDLENBQXVDLENBQXZDLENBeEJBLENBQUE7QUFBQSxNQXlCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQWIsQ0FBd0IsQ0FBQyxFQUFFLENBQUMsSUFBSSxDQUFDLE1BQWpDLENBQXdDLENBQXhDLENBekJBLENBQUE7QUFBQSxNQTBCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFNBQVUsQ0FBQSxDQUFBLENBQUUsQ0FBQyxJQUExQixDQUErQixDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBdEMsQ0FBNkMsR0FBN0MsQ0ExQkEsQ0FBQTtBQUFBLE1BMkJBLE1BQUEsQ0FBTyxLQUFLLENBQUMsVUFBVyxDQUFBLENBQUEsQ0FBRSxDQUFDLFVBQVUsQ0FBQyxJQUF0QyxDQUEyQyxDQUFDLEVBQUUsQ0FBQyxFQUFFLENBQUMsS0FBbEQsQ0FBeUQsR0FBekQsQ0EzQkEsQ0FBQTthQTRCQSxNQUFBLENBQU8sS0FBSyxDQUFDLFVBQVcsQ0FBQSxDQUFBLENBQUUsQ0FBQyxVQUFVLENBQUMsSUFBdEMsQ0FBMkMsQ0FBQyxFQUFFLENBQUMsRUFBRSxDQUFDLEtBQWxELENBQXlELEdBQXpELEVBaENpQztJQUFBLENBQXJDLEVBRDBCO0VBQUEsQ0FBOUIsQ0FMQyxDQUFBO0FBQUEiLCJmaWxlIjoib2JqZWN0LWV4cHJlc3Npb24uanMiLCJzb3VyY2VSb290IjoiL3NvdXJjZS8iLCJzb3VyY2VzQ29udGVudCI6WyIndXNlIHN0cmljdCdcblxuZXhwZWN0ID0gcmVxdWlyZSgnY2hhaScpLmV4cGVjdFxuZXNjb3BlID0gcmVxdWlyZSAnLi4nXG5cbmRlc2NyaWJlICdvYmplY3QgZXhwcmVzc2lvbicsIC0+XG4gICAgaXQgJ2RvZXNuXFwndCByZXF1aXJlIHByb3BlcnR5IHR5cGUnLCAtPlxuICAgICAgICAjIEhhcmRjb2RlZCBBU1QuICBFc3ByaW1hIGFkZHMgYW4gZXh0cmEgJ1Byb3BlcnR5J1xuICAgICAgICAjIGtleS92YWx1ZSB0byBPYmplY3RFeHByZXNzaW9ucywgc28gd2UncmUgbm90IHVzaW5nXG4gICAgICAgICMgaXQgcGFyc2UgYSBwcm9ncmFtIHN0cmluZy5cbiAgICAgICAgYXN0ID1cbiAgICAgICAgICAgIHR5cGU6ICdQcm9ncmFtJ1xuICAgICAgICAgICAgYm9keTogW3tcbiAgICAgICAgICAgICAgICB0eXBlOiAnVmFyaWFibGVEZWNsYXJhdGlvbidcbiAgICAgICAgICAgICAgICBkZWNsYXJhdGlvbnM6IFt7XG4gICAgICAgICAgICAgICAgICAgIHR5cGU6ICdWYXJpYWJsZURlY2xhcmF0b3InXG4gICAgICAgICAgICAgICAgICAgIGlkOlxuICAgICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ0lkZW50aWZpZXInXG4gICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiAnYSdcbiAgICAgICAgICAgICAgICAgICAgaW5pdDpcbiAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdPYmplY3RFeHByZXNzaW9uJ1xuICAgICAgICAgICAgICAgICAgICAgICAgcHJvcGVydGllczogW3tcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBraW5kOiAnaW5pdCdcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBrZXk6XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHR5cGU6ICdJZGVudGlmaWVyJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBuYW1lOiAnZm9vJ1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHZhbHVlOlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0eXBlOiAnSWRlbnRpZmllcidcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbmFtZTogJ2EnXG4gICAgICAgICAgICAgICAgICAgICAgICB9XVxuICAgICAgICAgICAgICAgIH1dXG4gICAgICAgICAgICB9XVxuXG4gICAgICAgIHNjb3BlID0gZXNjb3BlLmFuYWx5emUoYXN0KS5zY29wZXNbMF1cbiAgICAgICAgZXhwZWN0KHNjb3BlLnZhcmlhYmxlcykudG8uaGF2ZS5sZW5ndGgoMSlcbiAgICAgICAgZXhwZWN0KHNjb3BlLnJlZmVyZW5jZXMpLnRvLmhhdmUubGVuZ3RoKDIpXG4gICAgICAgIGV4cGVjdChzY29wZS52YXJpYWJsZXNbMF0ubmFtZSkudG8uYmUuZXF1YWwoJ2EnKVxuICAgICAgICBleHBlY3Qoc2NvcGUucmVmZXJlbmNlc1swXS5pZGVudGlmaWVyLm5hbWUpLnRvLmJlLmVxdWFsKCdhJylcbiAgICAgICAgZXhwZWN0KHNjb3BlLnJlZmVyZW5jZXNbMV0uaWRlbnRpZmllci5uYW1lKS50by5iZS5lcXVhbCgnYScpXG4iXX0=", "node_modules/escope/powered-test/object-expression.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escope/powered-test/object-expression.js");
    }
}
